<?php


/**
 * This class adds structure of 'senior' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 11/26/20 14:41:41
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class SeniorMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.SeniorMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(SeniorPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(SeniorPeer::TABLE_NAME);
		$tMap->setPhpName('Senior');
		$tMap->setClassname('Senior');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('SENIOR', 'Senior', 'VARCHAR', false, 255);

		$tMap->addColumn('STATUS', 'Status', 'VARCHAR', true, 255);

		$tMap->addColumn('TABLE', 'Table', 'VARCHAR', true, 255);

		$tMap->addColumn('TAKE', 'Take', 'VARCHAR', true, 255);

		$tMap->addColumn('CARD', 'Card', 'VARCHAR', true, 255);

		$tMap->addColumn('DISCOUNT', 'Discount', 'VARCHAR', false, 255);

		$tMap->addColumn('RECEIPT', 'Receipt', 'VARCHAR', true, 255);

		$tMap->addColumn('CUSTOMER', 'Customer', 'VARCHAR', true, 255);

		$tMap->addColumn('GIFTCERT', 'Giftcert', 'VARCHAR', false, 255);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

	} // doBuild()

} // SeniorMapBuilder
