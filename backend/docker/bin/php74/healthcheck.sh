#/usr/bin/env bash

set -e

FIRST_READY_STATUS_FLAG='/tmp/.FIRST_READY_STATUS_FLAG'

# Health check

echo 'Run command to validate the container status HERE'

# On success
if [ ! -f "${FIRST_READY_STATUS_FLAG}" ]; then
  # On first success...
  touch "${FIRST_READY_STATUS_FLAG}"

  # Run ON_RUN on first health check ok
  if [ ! -z "${DOCKER_ON_RUN}" ]; then
    eval "${DOCKER_ON_RUN}"
  fi
fi