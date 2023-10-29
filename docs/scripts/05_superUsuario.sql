  CREATE USER 'devuser'@'%' IDENTIFIED BY 'devuser';
  GRANT SELECT, INSERT, UPDATE, DELETE ON nwdb.* TO 'devuser'@'%';

