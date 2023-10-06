<?php
namespace carry0987\LineLogin;

class LineController
{
    private $lineConfig;

    public function __construct($clientID = null, $clientSecret = null, $redirectURI = null, $scope = null)
    {
        $config = new ConfigManager();
        $config->setClientID($clientID)
        ->setClientSecret($clientSecret)
        ->setRedirectURI($redirectURI)
        ->setScope($scope);
        $this->lineConfig = $config;
    }

    /**
     * Create Auth URL
     */
    public function lineLogin($state)
    {
        $auth = new LineAuthorization($this->lineConfig);
        return $auth->createAuthUrl($state);
    }

    /**
     * Get User Profile
     */
    public function getLineProfile($code)
    {
        $lineProfile = new LineProfile($this->lineConfig);
        $profile = $lineProfile->getLineProfile($code);
        return $profile;
    }

    /**
     * Get User Profile
     * @param $access_token
     */
    public function getLineProfileWithAccessToken($access_token)
    {
        $lineProfile = new LineProfile($this->lineConfig);
        $profile = $lineProfile->getLineProfileWithAccessToken($access_token);
        return $profile;
    }

    /**
     * Get Access Token
     */
    public function getAccessToken($code)
    {
        $lineProfile = new LineProfile($this->lineConfig);
        $profile = $lineProfile->getAccessToken($code);
        return $profile;
    }
}
