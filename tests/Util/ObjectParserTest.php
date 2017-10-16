<?php

use Nash\Traits\Arrayable;
use Nash\Traits\ObjectParseble;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-31 at 12:55:10.
 */
class ObjectParserTest extends PHPUnit_Framework_TestCase
{
    use ObjectParseble, Arrayable; 

    /**
     * @covers Nash\Client\Util\$self::toArray
     * @todo   Implement testToArray().
     */
    public function testToArray()
    {
        $object = new ObjectParserTestObject;
        $object->setName("Gean");
        
        $arr = $self::toArray($object);
        
        $this->assertEquals(2, count($arr));
        $this->assertEquals("Gean", $arr["name"]);
        $this->assertNull($arr["idade"]);
    }
    
    public function testToArrayParaPropriedadesComplexas() 
    {
        $single = new ObjectParserTestObject;
        $single->setName("Gean");
        $single->setIdade(26);
        $object = new ObjectParserTestComplexObject;
        $object->setSingleValue("Hello");
        $object->setSingleObject($single);
        
        $arr = $self::toArray($object);
        
        $this->assertEquals(3, count($arr));
        $this->assertEquals("Hello", $arr["singleValue"]);
        $this->assertEquals("Gean", $arr["singleObject.name"]);
        $this->assertEquals(26, $arr["singleObject.idade"]);
    }
    
    public function testToArrayParaPropriedadesComplexasComTresNiveis() 
    {
        $single = new ObjectParserTestObject;
        $single->setName("Gean");
        $single->setIdade(26);
        $complex = new ObjectParserTestComplexObject;
        $complex->setSingleValue("Hello");
        $complex->setSingleObject($single);
        $object = new ObjectParserTestComplexObject2;
        $object->setComplexObject($complex);
        
        $arr = $self::toArray($object);
        
        $this->assertEquals(3, count($arr));
        $this->assertEquals("Hello", $arr["complexObject.singleValue"]);
        $this->assertEquals("Gean", $arr["complexObject.singleObject.name"]);
        $this->assertEquals(26, $arr["complexObject.singleObject.idade"]);
    }
    
    public function testToArrayRemovePropriedadeComplexaQuePossuiPropriedadeId() 
    {
        $municipio = new MunicipioTestObject;        
        $municipio->setId(1);
        $municipio->setNome("Fortaleza");
        $conta = new ContaTestObject;
        $conta->setId(2);
        $conta->setNome("Banco do Brasil");
        
        $rateio = new RateioTestObject;
        $rateio->setMunicipio($municipio);
        $rateio->setConta($conta);
        
        $arr = $self::toArray($rateio);
        
        $this->assertEquals(2, count($arr));
        $this->assertEquals(1, $arr["Municipio_id"]);
        $this->assertEquals(2, $arr["Conta_id"]);
    }
    
    public function testToJsonRemovePropriedadeComplexaQuePossuiPropriedadeId() 
    {
        $municipio = new MunicipioTestObject;        
        $municipio->setId(1);
        $municipio->setNome("Fortaleza");
        $conta = new ContaTestObject;
        $conta->setId(2);
        $conta->setNome("Banco do Brasil");
        
        $rateio = new RateioTestObject;
        $rateio->setMunicipio($municipio);
        $rateio->setConta($conta);
        
        $arr = ArrayEx::transform($self::toArray($rateio));
        
        $this->assertEquals(2, count($arr));
        $this->assertEquals(1, $arr["Municipio_id"]);
        $this->assertEquals(2, $arr["Conta_id"]);
    }
}

class ObjectParserTestComplexObject2 
{
    protected $complexObject;
    
    public function getComplexObject() 
    {
        return $this->complexObject;
    }

    public function setComplexObject($complexObject) 
    {
        $this->complexObject = $complexObject;
        return $this;
    }
}

class ObjectParserTestComplexObject 
{
    protected $singleValue;
    protected $singleObject;
    
    public function getSingleObject() 
    {
        return $this->singleObject;
    }

    public function setSingleObject($singleObject) 
    {
        $this->singleObject = $singleObject;
        return $this;
    }
    
    public function getSingleValue() 
    {
        return $this->singleValue;
    }

    public function setSingleValue($singleValue) 
    {
        $this->singleValue = $singleValue;
        return $this;
    }
}

class ObjectParserTestObject 
{
    protected $name;
    protected $idade;
    
    public function getName() 
    {
        return $this->name;
    }

    public function getIdade() 
    {
        return $this->idade;
    }

    public function setName($name) 
    {
        $this->name = $name;
        return $this;
    }

    public function setIdade($idade) 
    {
        $this->idade = $idade;
        return $this;
    }
}

class ContaTestObject extends ModelBase
{
    public $Id;
    public $Nome;

    public function getNome() 
    {
        return $this->Nome;
    }

    public function setNome($Nome) 
    {
        $this->Nome = $Nome;
        return $this;
    }
    public function getId() 
    {
        return $this->Id;
    }

    public function setId($Id) 
    {
        $this->Id = $Id;
        return $this;
    }
}

class MunicipioTestObject extends ModelBase
{
    public $Id;
    public $Nome;

    public function getNome() 
    {
        return $this->Nome;
    }

    public function setNome($Nome)
    {
        $this->Nome = $Nome;
        return $this;
    }
    public function getId() 
    {
        return $this->Id;
    }

    public function setId($Id) 
    {
        $this->Id = $Id;
        return $this;
    }
}

class RateioTestObject extends ModelBase
{
    private $Municipio;
    private $Municipio_id;
    private $Conta;
    private $Conta_id;
    
    public function getConta() 
    {
        return $this->Conta;
    }

    public function getConta_id() 
    {
        return $this->Conta_id;
    }

    public function setConta(ContaTestObject $Conta) 
    {
        $this->Conta = $Conta;
        $this->Conta_id = $Conta->Id;
        return $this;
    }

    public function setConta_id($Conta_id) 
    {
        $this->Conta_id = $Conta_id;
        return $this;
    }

    public function getMunicipio() 
    {
        return $this->Municipio;
    }

    public function getMunicipio_id() 
    {
        return $this->Municipio_id;
    }

    public function setMunicipio(MunicipioTestObject $municipio) 
    {
        $this->Municipio = $municipio;
        $this->Municipio_id = $municipio->Id;
        return $this;
    }

    public function setMunicipio_id($Municipio_id) 
    {
        $this->Municipio_id = $Municipio_id;
        return $this;
    }
}