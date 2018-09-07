<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/net.proto

namespace Zaly\Proto\Core;

/**
 * Protobuf type <code>core.TransportDataHeaderKey</code>
 */
class TransportDataHeaderKey
{
    /**
     * Generated from protobuf enum <code>HeaderInvalid = 0;</code>
     */
    const HeaderInvalid = 0;
    /**
     * Generated from protobuf enum <code>HeaderErrorCode = 1;</code>
     */
    const HeaderErrorCode = 1;
    /**
     * Generated from protobuf enum <code>HeaderErrorInfo = 2;</code>
     */
    const HeaderErrorInfo = 2;
    /**
     * Generated from protobuf enum <code>HeaderSessionid = 3;</code>
     */
    const HeaderSessionid = 3;
    /**
     * the value must be set for websocket and zaly request.
     * 
     * (scheme://)?host:(port)?(/path)?
     * 
     * http://127.0.0.1
     * http://127.0.0.1:8080
     * http://127.0.0.1/child-dir/
     * zaly://127.0.0.1
     * zaly://127.0.0.1:3681
     * ws://127.0.0.1:8888/child-dir/
     *
     * Generated from protobuf enum <code>HeaderHostUrl = 4;</code>
     */
    const HeaderHostUrl = 4;
    /**
     * zalyUrl
     *
     * Generated from protobuf enum <code>HeaderReferer = 5;</code>
     */
    const HeaderReferer = 5;
    /**
     * the value is a string.
     * the jsRequest in web must set the value with the browser user agent.
     *
     * Generated from protobuf enum <code>HeaderUserAgent = 6;</code>
     */
    const HeaderUserAgent = 6;
    /**
     * whether the response can be cached by the client.
     *
     * Generated from protobuf enum <code>HeaderAllowCache = 7;</code>
     */
    const HeaderAllowCache = 7;
    /**
     * (string)UserClientLangType please when set its value.
     *
     * Generated from protobuf enum <code>HeaderUserClientLang = 8;</code>
     */
    const HeaderUserClientLang = 8;
    /**
     * Reference: (message Version).json
     *
     * Generated from protobuf enum <code>HeaderApplicationVersion = 10;</code>
     */
    const HeaderApplicationVersion = 10;
}
