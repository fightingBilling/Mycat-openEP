<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `Session.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/BuiltinSequences.php';
    require_once 'Ice/Identity.php';
    require_once 'Glacier2/SSLInfo.php';
}

namespace Glacier2
{
    if(!class_exists('\\Glacier2\\CannotCreateSessionException'))
    {
        class CannotCreateSessionException extends \Ice\UserException
        {
            public function __construct($reason='')
            {
                $this->reason = $reason;
            }

            public function ice_name()
            {
                return 'Glacier2::CannotCreateSessionException';
            }

            public function __toString()
            {
                global $Glacier2__t_CannotCreateSessionException;
                return IcePHP_stringifyException($this, $Glacier2__t_CannotCreateSessionException);
            }

            public $reason;
        }

        $Glacier2__t_CannotCreateSessionException = IcePHP_defineException('::Glacier2::CannotCreateSessionException', '\\Glacier2\\CannotCreateSessionException', true, null, array(
            array('reason', $IcePHP__t_string, false, 0)));
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\Session'))
    {
        interface Session
        {
            public function destroy();
        }

        class SessionPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::Session', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::Session', $facet);
            }
        }

        $Glacier2__t_Session = IcePHP_defineClass('::Glacier2::Session', '\\Glacier2\\Session', -1, true, false, $Ice__t_Object, null, null);

        $Glacier2__t_SessionPrx = IcePHP_defineProxy($Glacier2__t_Session);

        IcePHP_defineOperation($Glacier2__t_Session, 'destroy', 0, 0, 0, null, null, null, null);
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\StringSet'))
    {
        interface StringSet
        {
            public function add($additions);
            public function remove($deletions);
            public function get();
        }

        class StringSetPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::StringSet', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::StringSet', $facet);
            }
        }

        $Glacier2__t_StringSet = IcePHP_defineClass('::Glacier2::StringSet', '\\Glacier2\\StringSet', -1, true, false, $Ice__t_Object, null, null);

        $Glacier2__t_StringSetPrx = IcePHP_defineProxy($Glacier2__t_StringSet);

        IcePHP_defineOperation($Glacier2__t_StringSet, 'add', 2, 2, 0, array(array($Ice__t_StringSeq, false, 0)), null, null, null);
        IcePHP_defineOperation($Glacier2__t_StringSet, 'remove', 2, 2, 0, array(array($Ice__t_StringSeq, false, 0)), null, null, null);
        IcePHP_defineOperation($Glacier2__t_StringSet, 'get', 2, 2, 0, null, null, array($Ice__t_StringSeq, false, 0), null);
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\IdentitySet'))
    {
        interface IdentitySet
        {
            public function add($additions);
            public function remove($deletions);
            public function get();
        }

        class IdentitySetPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::IdentitySet', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::IdentitySet', $facet);
            }
        }

        $Glacier2__t_IdentitySet = IcePHP_defineClass('::Glacier2::IdentitySet', '\\Glacier2\\IdentitySet', -1, true, false, $Ice__t_Object, null, null);

        $Glacier2__t_IdentitySetPrx = IcePHP_defineProxy($Glacier2__t_IdentitySet);

        IcePHP_defineOperation($Glacier2__t_IdentitySet, 'add', 2, 2, 0, array(array($Ice__t_IdentitySeq, false, 0)), null, null, null);
        IcePHP_defineOperation($Glacier2__t_IdentitySet, 'remove', 2, 2, 0, array(array($Ice__t_IdentitySeq, false, 0)), null, null, null);
        IcePHP_defineOperation($Glacier2__t_IdentitySet, 'get', 2, 2, 0, null, null, array($Ice__t_IdentitySeq, false, 0), null);
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\SessionControl'))
    {
        interface SessionControl
        {
            public function categories();
            public function adapterIds();
            public function identities();
            public function getSessionTimeout();
            public function destroy();
        }

        class SessionControlPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::SessionControl', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::SessionControl', $facet);
            }
        }

        $Glacier2__t_SessionControl = IcePHP_defineClass('::Glacier2::SessionControl', '\\Glacier2\\SessionControl', -1, true, false, $Ice__t_Object, null, null);

        $Glacier2__t_SessionControlPrx = IcePHP_defineProxy($Glacier2__t_SessionControl);

        IcePHP_defineOperation($Glacier2__t_SessionControl, 'categories', 0, 0, 0, null, null, array($Glacier2__t_StringSetPrx, false, 0), null);
        IcePHP_defineOperation($Glacier2__t_SessionControl, 'adapterIds', 0, 0, 0, null, null, array($Glacier2__t_StringSetPrx, false, 0), null);
        IcePHP_defineOperation($Glacier2__t_SessionControl, 'identities', 0, 0, 0, null, null, array($Glacier2__t_IdentitySetPrx, false, 0), null);
        IcePHP_defineOperation($Glacier2__t_SessionControl, 'getSessionTimeout', 2, 2, 0, null, null, array($IcePHP__t_int, false, 0), null);
        IcePHP_defineOperation($Glacier2__t_SessionControl, 'destroy', 0, 0, 0, null, null, null, null);
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\SessionManager'))
    {
        interface SessionManager
        {
            public function create($userId, $control);
        }

        class SessionManagerPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::SessionManager', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::SessionManager', $facet);
            }
        }

        $Glacier2__t_SessionManager = IcePHP_defineClass('::Glacier2::SessionManager', '\\Glacier2\\SessionManager', -1, true, false, $Ice__t_Object, null, null);

        $Glacier2__t_SessionManagerPrx = IcePHP_defineProxy($Glacier2__t_SessionManager);

        IcePHP_defineOperation($Glacier2__t_SessionManager, 'create', 0, 0, 2, array(array($IcePHP__t_string, false, 0), array($Glacier2__t_SessionControlPrx, false, 0)), null, array($Glacier2__t_SessionPrx, false, 0), array($Glacier2__t_CannotCreateSessionException));
    }
}

namespace Glacier2
{
    if(!interface_exists('\\Glacier2\\SSLSessionManager'))
    {
        interface SSLSessionManager
        {
            public function create($info, $control);
        }

        class SSLSessionManagerPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::Glacier2::SSLSessionManager', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::Glacier2::SSLSessionManager', $facet);
            }
        }

        $Glacier2__t_SSLSessionManager = IcePHP_defineClass('::Glacier2::SSLSessionManager', '\\Glacier2\\SSLSessionManager', -1, true, false, $Ice__t_Object, null, null);

        $Glacier2__t_SSLSessionManagerPrx = IcePHP_defineProxy($Glacier2__t_SSLSessionManager);

        IcePHP_defineOperation($Glacier2__t_SSLSessionManager, 'create', 0, 0, 2, array(array($Glacier2__t_SSLInfo, false, 0), array($Glacier2__t_SessionControlPrx, false, 0)), null, array($Glacier2__t_SessionPrx, false, 0), array($Glacier2__t_CannotCreateSessionException));
    }
}
?>
