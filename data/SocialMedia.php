<?php 

class SocialMedia
{

}
class Facebook extends SocialMedia
{
    final public function login(string $name, string $password):bool
    {
        return true;
    }
}

/**
 * cannot inheritence final class
 */
class FakeFacebook extends Facebook
{
    /**
     * error:  Cannot override final method Facebook::login()
     */
    public function login(string $name, string $password):bool
    {
        return false;
    }
}