CREATE TABLE `task` (
  `taskId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userId` VARCHAR(255),
  `createdDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `label` VARCHAR(255),
  `text` VARCHAR(512),
  `color` VARCHAR(20),
  `state` VARCHAR(20),
  `coordinates` VARCHAR(255),
  PRIMARY KEY (`userId`),
  CONSTRAINT `fk_task_user_userId`
    FOREIGN KEY (`taskId`)
    REFERENCES `user` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
  );