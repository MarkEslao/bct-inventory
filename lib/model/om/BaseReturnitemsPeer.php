<?php

/**
 * Base static class for performing query and update operations on the 'returnitems' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 11/26/20 14:41:42
 *
 * @package    lib.model.om
 */
abstract class BaseReturnitemsPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'returnitems';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.Returnitems';

	/** The total number of columns. */
	const NUM_COLUMNS = 12;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'returnitems.ID';

	/** the column name for the PURCHASEORDER field */
	const PURCHASEORDER = 'returnitems.PURCHASEORDER';

	/** the column name for the ITEMS field */
	const ITEMS = 'returnitems.ITEMS';

	/** the column name for the QUANTITY field */
	const QUANTITY = 'returnitems.QUANTITY';

	/** the column name for the UNITPRICE field */
	const UNITPRICE = 'returnitems.UNITPRICE';

	/** the column name for the PRICE field */
	const PRICE = 'returnitems.PRICE';

	/** the column name for the DATE field */
	const DATE = 'returnitems.DATE';

	/** the column name for the USER field */
	const USER = 'returnitems.USER';

	/** the column name for the REMARKS field */
	const REMARKS = 'returnitems.REMARKS';

	/** the column name for the BRANCH field */
	const BRANCH = 'returnitems.BRANCH';

	/** the column name for the UPDATED_AT field */
	const UPDATED_AT = 'returnitems.UPDATED_AT';

	/** the column name for the CREATED_AT field */
	const CREATED_AT = 'returnitems.CREATED_AT';

	/**
	 * An identiy map to hold any loaded instances of Returnitems objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Returnitems[]
	 */
	public static $instances = array();

	/**
	 * The MapBuilder instance for this peer.
	 * @var        MapBuilder
	 */
	private static $mapBuilder = null;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Purchaseorder', 'Items', 'Quantity', 'Unitprice', 'Price', 'Date', 'User', 'Remarks', 'Branch', 'UpdatedAt', 'CreatedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'purchaseorder', 'items', 'quantity', 'unitprice', 'price', 'date', 'user', 'remarks', 'branch', 'updatedAt', 'createdAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::PURCHASEORDER, self::ITEMS, self::QUANTITY, self::UNITPRICE, self::PRICE, self::DATE, self::USER, self::REMARKS, self::BRANCH, self::UPDATED_AT, self::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'purchaseorder', 'items', 'quantity', 'unitprice', 'price', 'date', 'user', 'remarks', 'branch', 'updated_at', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Purchaseorder' => 1, 'Items' => 2, 'Quantity' => 3, 'Unitprice' => 4, 'Price' => 5, 'Date' => 6, 'User' => 7, 'Remarks' => 8, 'Branch' => 9, 'UpdatedAt' => 10, 'CreatedAt' => 11, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'purchaseorder' => 1, 'items' => 2, 'quantity' => 3, 'unitprice' => 4, 'price' => 5, 'date' => 6, 'user' => 7, 'remarks' => 8, 'branch' => 9, 'updatedAt' => 10, 'createdAt' => 11, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::PURCHASEORDER => 1, self::ITEMS => 2, self::QUANTITY => 3, self::UNITPRICE => 4, self::PRICE => 5, self::DATE => 6, self::USER => 7, self::REMARKS => 8, self::BRANCH => 9, self::UPDATED_AT => 10, self::CREATED_AT => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'purchaseorder' => 1, 'items' => 2, 'quantity' => 3, 'unitprice' => 4, 'price' => 5, 'date' => 6, 'user' => 7, 'remarks' => 8, 'branch' => 9, 'updated_at' => 10, 'created_at' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new ReturnitemsMapBuilder();
		}
		return self::$mapBuilder;
	}
	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. ReturnitemsPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(ReturnitemsPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ReturnitemsPeer::ID);

		$criteria->addSelectColumn(ReturnitemsPeer::PURCHASEORDER);

		$criteria->addSelectColumn(ReturnitemsPeer::ITEMS);

		$criteria->addSelectColumn(ReturnitemsPeer::QUANTITY);

		$criteria->addSelectColumn(ReturnitemsPeer::UNITPRICE);

		$criteria->addSelectColumn(ReturnitemsPeer::PRICE);

		$criteria->addSelectColumn(ReturnitemsPeer::DATE);

		$criteria->addSelectColumn(ReturnitemsPeer::USER);

		$criteria->addSelectColumn(ReturnitemsPeer::REMARKS);

		$criteria->addSelectColumn(ReturnitemsPeer::BRANCH);

		$criteria->addSelectColumn(ReturnitemsPeer::UPDATED_AT);

		$criteria->addSelectColumn(ReturnitemsPeer::CREATED_AT);

	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(ReturnitemsPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			ReturnitemsPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(ReturnitemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}


    foreach (sfMixer::getCallables('BaseReturnitemsPeer:doCount:doCount') as $callable)
    {
      call_user_func($callable, 'BaseReturnitemsPeer', $criteria, $con);
    }


		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Returnitems
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = ReturnitemsPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return ReturnitemsPeer::populateObjects(ReturnitemsPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseReturnitemsPeer:doSelectStmt:doSelectStmt') as $callable)
    {
      call_user_func($callable, 'BaseReturnitemsPeer', $criteria, $con);
    }


		if ($con === null) {
			$con = Propel::getConnection(ReturnitemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			ReturnitemsPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Returnitems $value A Returnitems object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Returnitems $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Returnitems object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Returnitems) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Returnitems object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Returnitems Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol + 0] === null) {
			return null;
		}
		return (string) $row[$startcol + 0];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = ReturnitemsPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = ReturnitemsPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = ReturnitemsPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				ReturnitemsPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

  static public function getUniqueColumnNames()
  {
    return array();
  }
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * This uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass()
	{
		return ReturnitemsPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a Returnitems or Criteria object.
	 *
	 * @param      mixed $values Criteria or Returnitems object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseReturnitemsPeer:doInsert:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BaseReturnitemsPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(ReturnitemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Returnitems object
		}

		if ($criteria->containsKey(ReturnitemsPeer::ID) && $criteria->keyContainsValue(ReturnitemsPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.ReturnitemsPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		
    foreach (sfMixer::getCallables('BaseReturnitemsPeer:doInsert:post') as $callable)
    {
      call_user_func($callable, 'BaseReturnitemsPeer', $values, $con, $pk);
    }

    return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Returnitems or Criteria object.
	 *
	 * @param      mixed $values Criteria or Returnitems object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseReturnitemsPeer:doUpdate:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BaseReturnitemsPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(ReturnitemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(ReturnitemsPeer::ID);
			$selectCriteria->add(ReturnitemsPeer::ID, $criteria->remove(ReturnitemsPeer::ID), $comparison);

		} else { // $values is Returnitems object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$ret = BasePeer::doUpdate($selectCriteria, $criteria, $con);
	

    foreach (sfMixer::getCallables('BaseReturnitemsPeer:doUpdate:post') as $callable)
    {
      call_user_func($callable, 'BaseReturnitemsPeer', $values, $con, $ret);
    }

    return $ret;
  }

	/**
	 * Method to DELETE all rows from the returnitems table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ReturnitemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(ReturnitemsPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Returnitems or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Returnitems object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(ReturnitemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			ReturnitemsPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Returnitems) {
			// invalidate the cache for this single object
			ReturnitemsPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ReturnitemsPeer::ID, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				ReturnitemsPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);

			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Returnitems object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Returnitems $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Returnitems $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ReturnitemsPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ReturnitemsPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(ReturnitemsPeer::DATABASE_NAME, ReturnitemsPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ReturnitemsPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
        }
    }

    return $res;
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Returnitems
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = ReturnitemsPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(ReturnitemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ReturnitemsPeer::DATABASE_NAME);
		$criteria->add(ReturnitemsPeer::ID, $pk);

		$v = ReturnitemsPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(ReturnitemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(ReturnitemsPeer::DATABASE_NAME);
			$criteria->add(ReturnitemsPeer::ID, $pks, Criteria::IN);
			$objs = ReturnitemsPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseReturnitemsPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the ReturnitemsPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the ReturnitemsPeer class:
//
// Propel::getDatabaseMap(ReturnitemsPeer::DATABASE_NAME)->addTableBuilder(ReturnitemsPeer::TABLE_NAME, ReturnitemsPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseReturnitemsPeer::DATABASE_NAME)->addTableBuilder(BaseReturnitemsPeer::TABLE_NAME, BaseReturnitemsPeer::getMapBuilder());

