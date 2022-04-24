<?php class Product implements JsonSerializable{ 
    
    private   $_name;
    private   $_imgUrl;
    private   $_tags; 
    
    public function __construct($name,$imgUrl,$tags){
        $this->_name = $name;
        $this->_imgUrl = $imgUrl;
        $this->_tags = $tags;
    }
    
    public function getName() {
        return $this->_name;
    }
    
    public function getImgUrl() {
        return $this->_imgUrl;
    }
    public function getTags() {
        return $this->_tags;
    }

    public function jsonSerialize()
    {
        return 
        [
            'name'   => $this->getName(),
            'imgUrl' => $this->getImgUrl(),
            'tags' => $this->getTags()
        ];
    }
 
}
 