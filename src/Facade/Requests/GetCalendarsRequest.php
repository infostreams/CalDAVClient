<?php namespace CalDAVClient\Facade\Requests;
/**
 * Copyright 2017 OpenStack Foundation
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/
/**
 * Class GetCalendarsRequest
 * @package CalDAVClient\Facade\Requests
 */
final class GetCalendarsRequest extends AbstractPropFindWebDAVRequest
{
    public function __construct(){
        $this->properties = [
            '{DAV:}resourcetype',
            '{DAV:}displayname',
            '{http://calendarserver.org/ns/}getctag',
            '{http://apple.com/ns/ical/}calendar-color', // http://sabre.io/dav/clients/ical/
            '{urn:ietf:params:xml:ns:caldav}supported-calendar-component-set',
        ];
    }
}