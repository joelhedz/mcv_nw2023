CREATE TABLE
    `version` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `version` char(32) NOT NULL,
        `description` varchar(100) DEFAULT NULL COMMENT 'Descripcion ',
        `create_at` datetime DEFAULT NULL COMMENT 'Create Time',
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci