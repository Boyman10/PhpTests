CREATE TABLE `mvc_user` (
  `id` smallint(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `user_role` VARCHAR(20) NOT NULL DEFAULT 'ROLE_ANO',
  user_pass VARCHAR(100) NOT NULL,

  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_USER` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `mvc_post` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` SMALLINT UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT fk_author foreign key(user_id) REFERENCES mvc_user(id)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `mvc_comment` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` SMALLINT UNSIGNED NOT NULL,
  `post_id` SMALLINT UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT fk_comment_author foreign key(user_id) REFERENCES mvc_user(id),
  CONSTRAINT fk_post foreign key(post_id) REFERENCES mvc_post(id)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
