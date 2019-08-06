<?php declare(strict_types = 1);

// Licensed to Elasticsearch B.V under one or more agreements.
// Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
// See the LICENSE file in the project root for more information

namespace Elasticsearch\Examples\Docs\Mapping\Params;

use Elasticsearch\Examples\Docs\Testers\SimpleExamplesTester;

/**
 *
 * Class: NullValue
 *
 * Date: 2019-08-06 06:59:53
 *
 * @source   mapping/params/null-value.asciidoc
 * @category Elasticsearch\Examples\Docs
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 *
 */
class NullValue extends SimpleExamplesTester {

    /**
     * Tag:  463e64093c0dfba910eb5b248085584f
     * Line: 12
     * Date: 2019-08-06 06:59:53
     */
    public function testExampleL12_463e64093c0dfba910eb5b248085584f()
    {
        $client = $this->getClient();
        // tag::463e64093c0dfba910eb5b248085584f[]
        // TODO -- Implement Example
        // PUT my_index
        // {
        //   "mappings": {
        //     "properties": {
        //       "status_code": {
        //         "type":       "keyword",
        //         "null_value": "NULL" \<1>
        //       }
        //     }
        //   }
        // }
        // PUT my_index/_doc/1
        // {
        //   "status_code": null
        // }
        // PUT my_index/_doc/2
        // {
        //   "status_code": [] \<2>
        // }
        // GET my_index/_search
        // {
        //   "query": {
        //     "term": {
        //       "status_code": "NULL" \<3>
        //     }
        //   }
        // }
        // end::463e64093c0dfba910eb5b248085584f[]

        $curl = 'PUT my_index'
              . '{'
              . '  "mappings": {'
              . '    "properties": {'
              . '      "status_code": {'
              . '        "type":       "keyword",'
              . '        "null_value": "NULL" \<1>'
              . '      }'
              . '    }'
              . '  }'
              . '}'
              . 'PUT my_index/_doc/1'
              . '{'
              . '  "status_code": null'
              . '}'
              . 'PUT my_index/_doc/2'
              . '{'
              . '  "status_code": [] \<2>'
              . '}'
              . 'GET my_index/_search'
              . '{'
              . '  "query": {'
              . '    "term": {'
              . '      "status_code": "NULL" \<3>'
              . '    }'
              . '  }'
              . '}';

        // TODO -- make assertion
    }

// %__METHOD__%


}
