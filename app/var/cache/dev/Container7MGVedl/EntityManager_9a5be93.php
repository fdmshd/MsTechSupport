<?php

namespace Container7MGVedl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86cd2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer474cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff382 = [
        
    ];

    public function getConnection()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getConnection', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getMetadataFactory', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getExpressionBuilder', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'beginTransaction', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getCache', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'transactional', array('func' => $func), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->transactional($func);
    }

    public function commit()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'commit', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->commit();
    }

    public function rollback()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'rollback', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getClassMetadata', array('className' => $className), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'createQuery', array('dql' => $dql), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'createNamedQuery', array('name' => $name), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'createQueryBuilder', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'flush', array('entity' => $entity), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'clear', array('entityName' => $entityName), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->clear($entityName);
    }

    public function close()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'close', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->close();
    }

    public function persist($entity)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'persist', array('entity' => $entity), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'remove', array('entity' => $entity), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'refresh', array('entity' => $entity), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'detach', array('entity' => $entity), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'merge', array('entity' => $entity), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'contains', array('entity' => $entity), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getEventManager', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getConfiguration', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'isOpen', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getUnitOfWork', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getProxyFactory', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'initializeObject', array('obj' => $obj), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'getFilters', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'isFiltersStateClean', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'hasFilters', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return $this->valueHolder86cd2->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer474cd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder86cd2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder86cd2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder86cd2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, '__get', ['name' => $name], $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        if (isset(self::$publicPropertiesff382[$name])) {
            return $this->valueHolder86cd2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86cd2;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86cd2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86cd2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86cd2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, '__isset', array('name' => $name), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86cd2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86cd2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, '__unset', array('name' => $name), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86cd2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86cd2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, '__clone', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        $this->valueHolder86cd2 = clone $this->valueHolder86cd2;
    }

    public function __sleep()
    {
        $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, '__sleep', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;

        return array('valueHolder86cd2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer474cd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer474cd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer474cd && ($this->initializer474cd->__invoke($valueHolder86cd2, $this, 'initializeProxy', array(), $this->initializer474cd) || 1) && $this->valueHolder86cd2 = $valueHolder86cd2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86cd2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86cd2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
