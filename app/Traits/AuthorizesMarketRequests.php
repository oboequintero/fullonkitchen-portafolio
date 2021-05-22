<?php

namespace App\Traits;

use App\Services\MarketAuthenticationService;


trait AuthorizesMarketRequests
{
    /**
     * Resolves the elements to send when authorazing the request
     * @param  array &$queryParams
     * @param  array &$formParams
     * @param  array &$headers
     * @return void
     */
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $accessToken = $this->resolveAccessToken();

        $headers['Authorization'] = $accessToken;
    }
     public function resolveAccessToken2()
    {
        return 'Basic Y2YyZjJkNmQtYTMxNC00NGE4LWI2MDAtNTA1M2MwYWYzMTY1Og==';
    }
   
     public function resolveAccessToken()
    {
        return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiNTViMDMwMjIwNTIzYWFmMmE0MGY2ZTI2NWU5M2I0MTQ0ZDIyOTc3OGQyOTlkMTM3OTk0YmRkMDg5YmIwYzEyY2RkODY4ODliZDJjYzg0NmEiLCJpYXQiOiIxNjE5MTE2NTU1LjkyMzU3NyIsIm5iZiI6IjE2MTkxMTY1NTUuOTIzNTk1IiwiZXhwIjoiMTY1MDY1MjU1NS45MDIzOTQiLCJzdWIiOiIxMDA0Iiwic2NvcGVzIjpbInB1cmNoYXNlLXByb2R1Y3QiLCJtYW5hZ2UtcHJvZHVjdHMiLCJtYW5hZ2UtYWNjb3VudCIsInJlYWQtZ2VuZXJhbCJdfQ.yBVzy7WxO7KHp3w45rQMT0pveQNAl21e42YQ-FH-eoNMvCn1jLndkx2X6-kfqXbiVY3AtFMa2dpfoRTnJILme7lmncQyN-kUpWRuOTVWLM30V4nDcJGfA4bD4_duTAyogOS2_ELpy72GO10mBqUFowGVIbiUY8-80s2zlK4NrARIdIsNjHLmWiQbdNNnYEmdLJ1MKFUgc61aI0-pi3XICLsie0_olYDNBxkwNJjqh_FlJ0Qu1tlg60rnIZHG57yiP9DlJaz-pKBLK4OJoVa9EQupthjUoYmbF734WZlyUJk5h1SLh5oxOg3OQBwTyh-0k4QveG9aciF2k3duy8aplVVjApGPIe9YBpzbpR3IMOW9q2RcTH6KdEpkc_PLgzDFD_BJyo9WwxPbnw-pW_qmswhpBz1NOlt8_VzkzjVCotdS1bOAwf5KFZecUMzGNeLIjLP4hiLQ5IXHRCb_R1IQ__YjqtUZ8-2bKWU2hpBcXNlZpoZL1P910zNqCHEqMGWqZH72ou2dzBE0Uzl2C69PCuvSZJyxj8JYD_MmIc9Lo6cP80CjdgHP-6nltEn7uVpufDjB7NAT1KtLcWTADVwxRlqO6r4TPoHJ2UCvajM-zlL3oMb9DBfl0leL456cd9HDNcwkB3J43xVVFXkRK6aJm_luOl1-beVgkg1z-erQtsM';
    }


 /**
     
    public function resolveAccessToken()
    {
        $authenticationService = resolve(MarketAuthenticationService::class);

        #if (auth()->user()) {
          #  return $authenticationService->getAuthenticatedUserToken();
        #}

        return $authenticationService->getClientCredentialsToken();
    }*/

}

