/* ТЕСТОВЫЕ ДАННЫЕ */ 
INSERT INTO `mydb`.`user` (`id`, `name`, `email`, `hash`)
    VALUES  (NULL, 'shkatov', 'shkatov.dmitry@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
            (NULL, 'ivanov', 'ivanov@gmail.com', NULL),
            (NULL, 'petrov', 'petrov@gmail.com', NULL),
            (NULL, 'sidorov', 'sidorov@gmail.com', NULL),
            (NULL, 'nikolaev', 'nikolaev@gmail.com', NULL);

SELECT id, name, email
    FROM `user`
      WHERE id = '2';

SELECT DISTINCT name, email
    FROM `user`;

DELETE id, name, email
    FROM `user`
      WHERE email LIKE 'shkatov%' AND id IN (2,7);

UPDATE `user`
    SET email = 'shkatov@gmail.com' 
      WHERE id = 1