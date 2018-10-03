<?php
/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://schemas.wbeme.com/
 */

\Gdbots\Pbj\MessageResolver::registerMap([
    'eme:accounts:node:account' => 'Eme\Schemas\Accounts\Node\AccountV1',
    'eme:accounts:request:get-account-request' => 'Eme\Schemas\Accounts\Request\GetAccountRequestV1',
    'eme:accounts:request:get-account-response' => 'Eme\Schemas\Accounts\Request\GetAccountResponseV1',
    'eme:accounts:request:get-active-accounts-request' => 'Eme\Schemas\Accounts\Request\GetActiveAccountsRequestV1',
    'eme:accounts:request:get-active-accounts-response' => 'Eme\Schemas\Accounts\Request\GetActiveAccountsResponseV1',
]);