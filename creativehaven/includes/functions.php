<?php

function getName() {
    echo getConfig('name');
}

function getSiteUrl() {
    echo getConfig('siteUrl');
}

function getCompanyContacts() {

    // Please note that the contacts provided in the file are not real.

    return file_get_contents(__DIR__ . '/companyContacts.txt');

}
