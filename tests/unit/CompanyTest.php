<?php 
class CompanyTest extends \Codeception\Test\Unit
{
    /**
     * @var \RWC\HotPads\Company
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new \RWC\HotPads\Company();
    }

    // tests
    public function testGetterAndSetterAgreement()
    {
        $id = '432423';
        $name = 'Fubar Real Estate';
        $city = 'Bel Air';
        $state = 'CA';
        $website = 'https://fubarrealestate.info/';
        $companylogo = 'https://fubarrealestate.info/logo.png';

        $this->fixture->setId($id);
        $this->assertEquals($id, $this->fixture->getId());

        $this->fixture->setName($name);
        $this->assertEquals($name, $this->fixture->getName());

        $this->fixture->setCity($city);
        $this->assertEquals($city, $this->fixture->getCity());

        $this->fixture->setState($state);
        $this->assertEquals($state, $this->fixture->getState());

        $this->fixture->setWebsite($website);
        $this->assertEquals($website, $this->fixture->getWebsite());

        $this->fixture->setCompanyLogo($companylogo);
        $this->assertEquals($companylogo, $this->fixture->getCompanyLogo());
    }
}