<?php
namespace carry0987\LineLogin;

class ConfigManager
{
    private $config;

    const CLIENT_ID = 'client_id';
    const CLIENT_SECRET = 'client_secret';
    const CLIENT_SCOPE = 'client_scope';
    const CLIENT_REDIRECT_URI = 'redirect_uri';

    public function setClientID($id)
    {
        $this->config[self::CLIENT_ID] = $id;
        return $this;
    }

    public function setClientSecret($secret)
    {
        $this->config[self::CLIENT_SECRET] = $secret;
        return $this;
    }

    public function setScope($scope)
    {
        $this->config[self::CLIENT_SCOPE] = $scope;
        return $this;
    }

    public function setRedirectURI($uri)
    {
        $this->config[self::CLIENT_REDIRECT_URI] = $uri;
        return $this;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }
}
