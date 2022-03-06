Adição de Coluna na tabela interessado

ALTER TABLE `db_matricula`.`interessado`
ADD COLUMN `idTipoContato` INT NOT NULL AFTER `idUniao`,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`idInteressado`, `idSerieEntidade`);
;

Adição de chave estrangeira da tabela tipo_contato para interessado

ALTER TABLE `db_matricula`.`interessado`
ADD INDEX `fk_tipo_contato_idx` (`idTipoContato` ASC) VISIBLE;
;
ALTER TABLE `db_matricula`.`interessado`
ADD CONSTRAINT `fk_tipo_contato`
  FOREIGN KEY (`idTipoContato`)
  REFERENCES `db_matricula`.`tipocontato` (`idTipoContato`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;



Colocando idOrigemInteressado como campo obrigatório

ALTER TABLE `db_matricula`.`interessado`
CHANGE COLUMN `idOrigemInteressado` `idOrigemInteressado` INT NOT NULL ;


Criação da foreign key origem interessado

ALTER TABLE `db_matricula`.`interessado`
ADD INDEX `fk_origem_interessado_idx` (`idOrigemInteressado` ASC) VISIBLE;
;
ALTER TABLE `db_matricula`.`interessado`
ADD CONSTRAINT `fk_origem_interessado`
  FOREIGN KEY (`idOrigemInteressado`)
  REFERENCES `db_matricula`.`origeminteressado` (`idOrigemInteressado`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
