#!/bin/sh

DIRNAME=`dirname $0`
REALPATH=`which realpath`
if [ ! -z "${REALPATH}" ]; then
  DIRNAME=`realpath ${DIRNAME}`
fi

${HPHP_HOME}/hphp/test/run \
  -a -vDynamicExtensions.0=${DIRNAME}/xdiff.so \
  ${DIRNAME}/test

${HPHP_HOME}/hphp/test/run \
  -m interp -r \
  -a -vDynamicExtensions.0=${DIRNAME}/xdiff.so \
  ${DIRNAME}/test
