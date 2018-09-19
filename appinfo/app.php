<?php

if (\OC::$server->getUserSession()->isLoggedIn() !== true
	&& strpos(\OC::$server->getRequest()->getRequestUri(), '/login') !== false) {
	\OCP\Util::addStyle('wallpaper', 'login');
	$manager = \OC::$server->getContentSecurityPolicyManager();
	$policy = new \OC\Security\CSP\ContentSecurityPolicy();
	$policy->addAllowedImageDomain('source.unsplash.com');
	$policy->addAllowedImageDomain('images.unsplash.com');
	$manager->addDefaultPolicy($policy);
}