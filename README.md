# ft_server

## How to use

### Build the image

`docker build . -t ft_server`

### Run the container

`docker run -it -p 80:80 -p 443:443 --rm ft_server --name ft_server`

## Mandatory

| Debian Buster | Wordpress | PhpMyAdmin | SSL | MySQL | Autoindex on/off |
|----|----|----|----|----|----|
| OK | OK | OK | OK | OK | OK |

## Final Grade
![alt text](https://i.imgur.com/rKy0zGM.png)
