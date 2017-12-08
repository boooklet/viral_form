<?php
class ViralFormApi
{
    const API_URL_MEMBER_DATA = 'https://api.booklet.pl/v1/';
    const TEST_API_URL_MEMBER_DATA = 'http://api.booklet.dev/v1/';

    public static function getApiUrl()
    {
        return ViralForm::isTestMode() ? self::TEST_API_URL_MEMBER_DATA : self::API_URL_MEMBER_DATA;
    }
}
