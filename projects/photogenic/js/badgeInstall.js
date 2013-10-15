var flashvars = {};

flashvars.airversion = '1.1';
flashvars.appname = 'PhotoGenic';
flashvars.appurl = 'http://brandanmajeske.com/photogenic/install/PhotoGenic.air';
flashvars.imageurl = 'images/badge.png';

var params = {};
params.wmode = 'window';
params.menu = 'false';
params.quality = 'high';

var attributes = {};

swfobject.embedSWF('install_swf/AIRInstallBadge.swf', 'badge_div', '205', '170', '9.0.115', 'install_swf/expressInstall.swf', flashvars, params, attributes);

