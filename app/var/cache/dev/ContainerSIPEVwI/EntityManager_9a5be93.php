<?php

namespace ContainerSIPEVwI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4631e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer11297 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties31896 = [
        
    ];

    public function getConnection()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getConnection', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getMetadataFactory', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getExpressionBuilder', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'beginTransaction', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getCache', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'transactional', array('func' => $func), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->transactional($func);
    }

    public function commit()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'commit', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->commit();
    }

    public function rollback()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'rollback', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getClassMetadata', array('className' => $className), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'createQuery', array('dql' => $dql), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'createNamedQuery', array('name' => $name), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'createQueryBuilder', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'flush', array('entity' => $entity), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'clear', array('entityName' => $entityName), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->clear($entityName);
    }

    public function close()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'close', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->close();
    }

    public function persist($entity)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'persist', array('entity' => $entity), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'remove', array('entity' => $entity), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'refresh', array('entity' => $entity), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'detach', array('entity' => $entity), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'merge', array('entity' => $entity), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'contains', array('entity' => $entity), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getEventManager', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getConfiguration', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'isOpen', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getUnitOfWork', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getProxyFactory', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'initializeObject', array('obj' => $obj), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'getFilters', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'isFiltersStateClean', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'hasFilters', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return $this->valueHolder4631e->hasFilters();
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

        $instance->initializer11297 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4631e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4631e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4631e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, '__get', ['name' => $name], $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        if (isset(self::$publicProperties31896[$name])) {
            return $this->valueHolder4631e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4631e;

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

        $targetObject = $this->valueHolder4631e;
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
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4631e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4631e;
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
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, '__isset', array('name' => $name), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4631e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4631e;
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
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, '__unset', array('name' => $name), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4631e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4631e;
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
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, '__clone', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        $this->valueHolder4631e = clone $this->valueHolder4631e;
    }

    public function __sleep()
    {
        $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, '__sleep', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;

        return array('valueHolder4631e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer11297 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer11297;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer11297 && ($this->initializer11297->__invoke($valueHolder4631e, $this, 'initializeProxy', array(), $this->initializer11297) || 1) && $this->valueHolder4631e = $valueHolder4631e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4631e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4631e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
