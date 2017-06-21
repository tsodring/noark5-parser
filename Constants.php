<?php

/**
 * Created by PhpStorm.
 * User: tsodring
 * Date: 6/15/17
 * Time: 4:42 PM
 */
class Constants
{
    const GET = "GET";
    const POST = "POST";
    const REL  = "rel";
    const HREF = "href";
    const LINKS = "_links";

    const ACCEPT_NOARK_JSON = "Accept: application/vnd.noark5-v4+json";
    const AUTHORISATION = "Accept: application/vnd.noark5-v4+json";
    const CONTENT_TYPE_NOARK_JSON = "Content-Type: application/vnd.noark5-v4+json";

    const REL_JWT_LOGIN = "http://nikita.arkivlab.no/noark5/v4/login/rfc7519/";
    const REL_ARKIVSTRUKTUR = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/";
    const REL_ARKIVSTRUKTUR_ARKIV = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/arkiv/";
    const REL_ARKIVSTRUKTUR_ARKIVDEL = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/arkivdel/";
    const REL_ARKIVSTRUKTUR_NY_ARKIVDEL = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/ny-arkivdel/";
    const REL_ARKIVSTRUKTUR_ARKIVSKAPER = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/arkivskaper/";
    const REL_ARKIVSTRUKTUR_NY_ARKIV = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/ny-arkiv/";
    const REL_ARKIVSTRUKTUR_NY_ARKIVSKAPER = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/ny-arkivskaper/";
    const REL_ARKIVSTRUKTUR_MAPPE = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/mappe/";
    const REL_ARKIVSTRUKTUR_NY_MAPPE = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/ny-mappe/";
    const REL_ARKIVSTRUKTUR_REGISTRERING = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/registrering/";
    const REL_ARKIVSTRUKTUR_NY_REGISTRERING = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/ny-registrering/";
    const REL_ARKIVSTRUKTUR_DOKUMENTBESKRIVELSE = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/dokumentbeskrivelse/";
    const REL_ARKIVSTRUKTUR_NY_DOKUMENTBESKRIVELSE = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/ny-dokumentbeskrivelse/";
    const REL_ARKIVSTRUKTUR_DOKUMENTOBJEKT = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/dokumentobjekt/";
    const REL_ARKIVSTRUKTUR_NY_DOKUMENTOBJEKT = "http://rel.kxml.no/noark5/v4/api/arkivstruktur/ny-dokumentobjekt/";
}