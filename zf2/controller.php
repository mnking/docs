<?php

/*
* Get current route name
* Ex: home
*/ 
$routeMatch = $this->getServiceLocator()->get('Application')->getMvcEvent()->getRouteMatch();
echo $routeMatch->getMatchedRouteName();