#!/bin/bash

# Routines

analyse () {
    echo - - - - -
    echo STATIC ANALYSIS
    echo - - - - -
    vendor/bin/phpstan analyse .
}

commit () {
    cd "../"
    git add api/coverage-report.txt
    git add private/env.example
}

env () {
    cd "../private/"
    rm "env.example"
    cp ".env" "env.example"
    # Replaces [= "something in here"] to [= ""]
    sed -i -e "s/\( = \".*\"\)/ = \"\"/g" "env.example"
    # Removes commented lines
    sed -i -e "s/\(# .*\)//g" "env.example"
}

metrics () {
    echo - - - - -
    echo METRICS REPORT
    echo - - - - -
    phpmetrics --report-html="./metrics-report" ./
}

sniff () {
    echo - - - - -
    echo CODE SNIFFER
    echo - - - - -
    phpcs -s
}

test () {
    echo - - - - -
    echo UNIT TESTS AND COVERAGE REPORT
    echo - - - - -
    phpunit --bootstrap vendor/autoload.php src/ --whitelist src --coverage-html coverage-report --coverage-text=coverage-report.txt
}

all () {
    sniff
    analyse
    test
    metrics
    env
    commit
}

# Interactive Executor

function run() {
    if [ "$task" = "1" ] || [ "$task" = "" ]
    then
        test
    elif [ "$task" = "2" ]
    then
        sniff
        analyse
    elif [ "$task" = "3" ]
    then
        all
    else
        echo Unknown command. Exiting...
    fi
}

# CLI Executor

if [ -z "$1" ]
then
    echo "Please select a task:"
    echo "(1) Test only (Default)"
    echo "(2) Sniff and analyse"
    echo "(3) Prepare commit"
    read task
    run $task
else
    case $1 in
        test)
            test
            ;;
        save)
            sniff
            analyse
            ;;
        commit)
            all
            ;;
        *)
            echo Unknown command. Exiting...
            ;;
    esac
fi

