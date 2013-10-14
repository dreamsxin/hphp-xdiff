#!/bin/sh

DIRNAME=`dirname $0`
REALPATH=`which realpath`
if [ ! -z "${REALPATH}" ]; then
  DIRNAME=`realpath ${DIRNAME}`
fi

LD_PRELOAD=/usr/local/lib/libxdiff.so \
${HPHP_HOME}/hphp/hhvm/hhvm \
  -vDynamicExtensions.0=${DIRNAME}/xdiff.so \
  ${DIRNAME}/test.php
