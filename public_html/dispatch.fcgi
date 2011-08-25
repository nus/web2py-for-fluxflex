#!/usr/bin/env python
import os
import sys

from gluon.main import wsgibase
import gluon.contrib.gateways.fcgi
from gluon.contrib.gateways.fcgi import WSGIServer

if __name__ == '__main__':
    WSGIServer(wsgibase).run()
