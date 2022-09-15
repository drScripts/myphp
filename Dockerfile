FROM php:7.4-cli
WORKDIR /project
COPY . .
CMD ["php", "-S", "0.0.0.0:3000"]
