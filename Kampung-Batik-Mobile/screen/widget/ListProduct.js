import React, {
  useEffect,
  useState
} from 'react';
import {
  View,
  StyleSheet,
  Text
} from 'react-native';
import axios from "axios";


const ListProduct = () => {
  const [data, setData] = useState([]);

  const FetchProduct = () => {
    console.log("test");
    let config = {
      method: 'get',
      maxBodyLength: Infinity,
      url: 'http://127.0.0.1:8000/api/toko',
      headers: { 
        'Accept': 'application/json'
      }
    };
    
    axios.request(config)
    .then((response) => {
      console.log(JSON.stringify(response.data));
    })
    .catch((error) => {
      console.log(error);
    });
    
  }

  useEffect(() => {
    //fetchData();
    FetchProduct();
  }, []);

  
  return ( 
    <View> 
      { data.map((product) => ( 
          <Text key = {product.id}> {product.name} </Text>
        ))
      } 
    </View>
  );
};

const styles = StyleSheet.create({});

export default ListProduct;