<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

Software Copyright (c) 2010 Paul Merchant
',
    'readme' => 'getResourceField

A modx snippet to get a field or a TV value from a given resource. TV values can
be processed unprocessed. 

@ author Paul Merchant
@ author Shaun McCormick
@ copyright 2011 Paul Merchant
@ version 1.0.3 - August 8, 2011
@ MIT License

OPTIONS
id - The resource ID
field - (Opt) The field or template variable name. Defaults to pagetitle
isTV - (Opt) Set as true to return a raw template variable
processTV - (Opt) Set as true to return a rendered template variable
default - (Opt) The value returned if no field value is found

Exmaple1: [[getResourceField? &id=`123`]]
Example2: [[getResourceField? &id=`[[UltimateParent?]]` &field=`myTV` &isTV=`1`]]
Example3: [[getResourceField? &id=`[[*parent]]` &field=`myTV` &processTV=`1`]]

',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'a809c36c897d00f9ede17781b72241f5',
      'native_key' => 'getresourcefield',
      'filename' => 'modNamespace/022b8cc3b0eafe71a17fc3ca48be10d7.vehicle',
      'namespace' => 'getresourcefield',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '9b2a52e0cc8cd1c53e4eef5f01bb5e20',
      'native_key' => 1,
      'filename' => 'modCategory/30efc5124be52e959c74ad078c2d88da.vehicle',
      'namespace' => 'getresourcefield',
    ),
  ),
);