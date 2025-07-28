#syntax=docker/dockerfile:1.4

ARG BASE_IMAGE=heycart/docker-base:8.3

# pin versions
FROM ${BASE_IMAGE} as base-image
FROM heycart/heycart-cli:latest-php-8.3 as heycart-cli

# build

FROM heycart-cli as build

ADD . /src
WORKDIR /src

RUN /usr/local/bin/entrypoint.sh heycart-cli project ci /src

# build final image

FROM base-image

COPY --from=build --chown=82 --link /src /var/www/html
