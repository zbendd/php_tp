<?php class ProductSerializer implements Serializable {
    private   $_name;
    private   $_imgUrl;
    private   $_tags; 

    public function __construct($name, $imgUrl, $tags) { 

        $this->_name = $name;
        $this->_imgUrl = $imgUrl;
        $this->_tags = $tags;
    }
    
    public function unserialize($data) { 
        list(
            $this->_name,
            $this->_imgUrl,
            $this->_tags
        ) = unserialize($data);
    }

    public function serialize() {
        echo "Serializing ProductSerializer...\n";
        return serialize(
            array(
                'name' => $this->_name,
                'imgUrl' => $this->_imgUrl,
                'tags' => $this->_tags 
            )
        );
    }
    
}
  
 