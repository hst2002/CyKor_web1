CREATE DATABASE IF NOT EXISTS exampledb;
USE exampledb;

CREATE TABLE IF NOT EXISTS users(
    username VARCHAR(50),
    password VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS posts(
    postnum INT,
    poster VARCHAR(50),
    title VARCHAR(50),
    content VARCHAR(200)
);

CREATE TABLE IF NOT EXISTS comments(
    postnum INT,
    commenter VARCHAR(50),
    comment VARCHAR(200)
);