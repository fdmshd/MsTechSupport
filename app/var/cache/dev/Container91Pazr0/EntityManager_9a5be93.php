<?php

namespace Container91Pazr0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder30302 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20971 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0a218 = [
        
    ];

    public function getConnection()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getConnection', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getMetadataFactory', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getExpressionBuilder', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'beginTransaction', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getCache', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getCache();
    }

    public function transactional($func)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'transactional', array('func' => $func), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->transactional($func);
    }

    public function commit()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'commit', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->commit();
    }

    public function rollback()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'rollback', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getClassMetadata', array('className' => $className), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'createQuery', array('dql' => $dql), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'createNamedQuery', array('name' => $name), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'createQueryBuilder', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'flush', array('entity' => $entity), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'clear', array('entityName' => $entityName), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->clear($entityName);
    }

    public function close()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'close', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->close();
    }

    public function persist($entity)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'persist', array('entity' => $entity), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'remove', array('entity' => $entity), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'refresh', array('entity' => $entity), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'detach', array('entity' => $entity), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'merge', array('entity' => $entity), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getRepository', array('entityName' => $entityName), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'contains', array('entity' => $entity), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getEventManager', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getConfiguration', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'isOpen', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getUnitOfWork', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getProxyFactory', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'initializeObject', array('obj' => $obj), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'getFilters', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'isFiltersStateClean', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'hasFilters', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return $this->valueHolder30302->hasFilters();
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

        $instance->initializer20971 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder30302) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder30302 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder30302->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, '__get', ['name' => $name], $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        if (isset(self::$publicProperties0a218[$name])) {
            return $this->valueHolder30302->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30302;

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

        $targetObject = $this->valueHolder30302;
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
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30302;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder30302;
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
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, '__isset', array('name' => $name), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30302;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder30302;
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
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, '__unset', array('name' => $name), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30302;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder30302;
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
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, '__clone', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        $this->valueHolder30302 = clone $this->valueHolder30302;
    }

    public function __sleep()
    {
        $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, '__sleep', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;

        return array('valueHolder30302');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer20971 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer20971;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer20971 && ($this->initializer20971->__invoke($valueHolder30302, $this, 'initializeProxy', array(), $this->initializer20971) || 1) && $this->valueHolder30302 = $valueHolder30302;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder30302;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder30302;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
