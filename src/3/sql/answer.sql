CREATE TABLE user
(
  id         int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  email      varchar(255)    NOT NULL,
  password   varchar(128)    NOT NULL,
  name_en    varchar(128),
  name_es    varchar(128),
  name_fr    varchar(128),
  created_at timestamp                DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp                DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE employee
(
  id              int PRIMARY KEY       NOT NULL AUTO_INCREMENT,
  user_id         int                   NOT NULL,
  id_code         varchar(32)           NOT NULL,
  ssn             varchar(32)           NOT NULL,
  birthday        timestamp             NOT NULL,
  status          boolean               NOT NULL DEFAULT true,
  email           varchar(255),
  phone           varchar(16),
  introduction_en text,
  introduction_es text,
  introduction_fr text,
  name_en         varchar(128),
  name_es         varchar(128),
  name_fr         varchar(128),
  created_by      int                   NOT NULL,
  created_at      timestamp                      DEFAULT CURRENT_TIMESTAMP,
  updated_at      timestamp                      DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT employee_user_id_fk FOREIGN KEY (user_id) REFERENCES user (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT employee_created_by_fk FOREIGN KEY (created_by) REFERENCES user (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE employee_education
(
  id             int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  employee_id    int             NOT NULL,
  name_en        varchar(255),
  name_es        varchar(255),
  name_fr        varchar(255),
  description_en text,
  description_es text,
  description_fr text,
  created_by     int             NOT NULL,
  started_at     timestamp       NOT NULL DEFAULT CURRENT_TIMESTAMP,
  finished_at    timestamp                DEFAULT CURRENT_TIMESTAMP,
  created_at     timestamp                DEFAULT CURRENT_TIMESTAMP,
  updated_at     timestamp                DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT employee_education_employee_id_fk FOREIGN KEY (employee_id) REFERENCES employee (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT employee_education_created_by_fk FOREIGN KEY (created_by) REFERENCES user (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE employee_previous_work
(
  id                  int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  employee_id         int             NOT NULL,
  organiztion_name_en varchar(255),
  organiztion_name_es varchar(255),
  organiztion_name_fr varchar(255),
  position_en         varchar(255),
  position_es         varchar(255),
  position_fr         varchar(255),
  description_en      text,
  description_es      text,
  description_fr      text,
  created_by          int             NOT NULL,
  started_at          timestamp       NOT NULL DEFAULT CURRENT_TIMESTAMP,
  finished_at         timestamp                DEFAULT CURRENT_TIMESTAMP,
  created_at          timestamp                DEFAULT CURRENT_TIMESTAMP,
  updated_at          timestamp                DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT employee_previous_work_employee_id_fk FOREIGN KEY (employee_id) REFERENCES employee (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT employee_previous_work_created_by_fk FOREIGN KEY (created_by) REFERENCES user (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

INSERT INTO `user` (`id`, `email`, `password`, `name_en`, `name_es`, `name_fr`, `created_at`, `updated_at`)
VALUES
  (1, 'isudakoff@gmail.com', '$2y$10$CkRf1v6ASfH6h.i8jEau7Oak.Nf69u.UTunpwp1lZ4wYtbSNI82Jm', 'Ilya', 'Ilya', 'Ilya',
   DEFAULT, DEFAULT);

INSERT INTO `user` (`id`, `email`, `password`, `name_en`, `name_es`, `name_fr`, `created_at`, `updated_at`)
VALUES (2, 'john@mysite.com', '$2y$10$CkRf1v6ASfH6h.i8jEau7Oak.Nf69u.UTunpwp1lZ4wYtbSNI82Jm', 'John', 'Juan', 'John',
        DEFAULT, DEFAULT);

INSERT INTO `employee` (`id`, `user_id`, `id_code`, `ssn`, `birthday`, `status`, `email`, `phone`, `introduction_en`, `introduction_es`, `introduction_fr`, `name_en`, `name_es`, `name_fr`, `created_by`, `created_at`, `updated_at`)
VALUES (1, 2, '12345678901', '123456789012', FROM_UNIXTIME(765763200), 1, 'john@mysite.com', '+79333344000',
           'Hello. My name is John.', 'Hola. Mi nombre es John.', 'Bonjour. Mon nom est John.', 'John', 'Juan', 'John',
        1, DEFAULT, DEFAULT);

INSERT INTO `employee_education` (`id`, `employee_id`, `name_en`, `name_es`, `name_fr`, `description_en`, `description_es`, `description_fr`, `created_by`, `started_at`, `finished_at`)
VALUES (1, 1, 'Siberian Federal University', 'Universidad Federal de Siberia', 'Université fédérale de Sibérie',
  'I got a diploma', 'Tengo un diploma', 'J\'ai un diplome', 1, FROM_UNIXTIME(1346457600), FROM_UNIXTIME(1472688000));

INSERT INTO `employee_previous_work` (`id`, `employee_id`, `organiztion_name_en`, `organiztion_name_es`, `organiztion_name_fr`, `position_en`, `position_es`, `position_fr`, `description_en`, `description_es`, `description_fr`, `created_by`, `started_at`, `finished_at`)
VALUES
  (1, 1, 'Edison Ltd', 'Edison Ltd', 'Edison Ltd', 'Software Engineer', 'Ingeniero de software', 'Ingénieur logiciel',
      'I implemented several new features of our plugin for Jira',
      'Implementé varias características nuevas de nuestro plugin para Jira.',
      'J\'ai implémenté plusieurs nouvelles fonctionnalités de notre plugin pour Jira', 1, FROM_UNIXTIME(1475280000),
   FROM_UNIXTIME(1506816000));

SELECT
  e.id                    as e_id,
  e.user_id               as e_user_id,
  e.id_code               as e_id_code,
  e.ssn                   as e_ssn,
  e.birthday              as e_birthday,
  e.status                as e_status,
  e.email                 as e_email,
  e.phone                 as e_phone,
  e.introduction_en       as e_introduction_en,
  e.introduction_es       as e_introduction_es,
  e.introduction_fr       as e_introduction_fr,
  e.introduction_fr       as e_introduction_fr,
  e.name_en               as e_name_en,
  e.name_es               as e_name_es,
  e.name_fr               as e_name_fr,
  e.created_by            as e_created_by,
  ee.id                   as ee_id,
  ee.employee_id          as ee_employee_id,
  ee.name_en              as ee_name_en,
  ee.name_es              as ee_name_es,
  ee.name_fr              as ee_name_fr,
  ee.description_en       as ee_description_en,
  ee.description_es       as ee_description_es,
  ee.description_fr       as ee_description_fr,
  ee.created_by           as ee_created_by,
  ee.started_at           as ee_started_at,
  ee.finished_at          as ee_finished_at,
  epw.id                  as epw_id,
  epw.employee_id         as epw_employee_id,
  epw.organiztion_name_en as epw_organiztion_name_en,
  epw.organiztion_name_es as epw_organiztion_name_es,
  epw.organiztion_name_fr as epw_organiztion_name_fr,
  epw.position_en         as epw_position_en,
  epw.position_es         as epw_position_es,
  epw.position_fr         as epw_position_fr,
  epw.description_en      as epw_description_en,
  epw.description_es      as epw_description_es,
  epw.description_fr      as epw_description_fr,
  epw.created_by          as epw_created_by,
  epw.started_at          as epw_started_at,
  epw.finished_at         as epw_finished_at
FROM employee e
  LEFT JOIN employee_education ee using (id)
  LEFT JOIN employee_previous_work epw using (id)
WHERE e.user_id = 2;