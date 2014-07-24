name             'session-hijacking'
maintainer       'MITRE'
maintainer_email 'rbclark@mitre.org'
license          'All rights reserved'
description      'Installs/Configures session-hijacking challenge.'
long_description IO.read(File.join(File.dirname(__FILE__), 'README.md'))
version          '0.1.0'

depends          'apt'
depends          'unattended-upgrades'