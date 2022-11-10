
# Infinite Sequence Calculator
This app finds the nth element of the following infinite sequence :

**0, 1, 1, 2, 3, 5, 8, 13, 12, 7, 10, 8, 9, ...**

## Installation

After clone the repository follow these steps:

To autoload files and install packages:
```bash
docker-compose run composer install
```   
To run the web server and access application through localhost:8080 :

```bash
docker-compose up -d fpm nginx
```
## Running Tests


```bash
docker-compose run phpunit
```

  
## Screenshot

![App Screenshot](screenshot.png?raw=true "Screenshot")

## Author

- [@OmidMorovati](https://github.com/OmidMorovati)

