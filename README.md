## Cosign SSO Bundle ##

Setup (Symfony 2.x):

* Add/register CosignSSOBundle in app/AppKernel.php
````
public function registerBundles()
{
    $bundles = array(
        ...
        new SAS\IRAD\CosignSSOBundle\CosignSSOBundle(),
````

* Setup a firewall rule with cosign_sso for your protected content:
````
    firewalls:
        protected:
            pattern:    ^/.*
            cosign_sso:
              cosign_app: YourCosignAppName  
````              
The *cosign_app* parameter is user defined. You may use any name you want for your app.
              
* In your code, use the "cosign_util" service in your controller to perform cosign functions:
````
    $cosign = $this->get('cosign_util');
    
    // expire a cosign session
    $cosign->expire();
    
    // redirect to global logout
    return $this->redirect($cosign->globalLogoutUrl());
````
