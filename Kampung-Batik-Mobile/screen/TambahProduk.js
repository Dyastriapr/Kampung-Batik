import React from "react";
import { View, StyleSheet, Text, TouchableOpacity, TextInput } from "react-native";


const TambahProduk = () => {
  return (
    <View>
      <View>
        <Text style={styles.label}>Nama Produk</Text>
        <View
          style={{
            ...styles.inputan,
            flexDirection: "row",
            alignItems: "center",
          }}
        >
          <TextInput
            style={styles.text_input}
            placeholder="Masukan Nama Produk"
            placeholderTextColor={"black"}
          />
        </View>
      </View>

      <View>
        <Text style={styles.label}>Deskripsi Produk</Text>
        <View
          style={{
            ...styles.inputan,
            flexDirection: "row",
            alignItems: "flex-start",
            height: 120,
          }}
        >
          <TextInput
            style={styles.text_input}
            placeholder="Masukan Deskirpsi Produk"
            placeholderTextColor={"black"}
          />
        </View>
      </View>

      <View>
        <Text style={styles.label}>Pilih Kategori</Text>
        <View
          style={{
            ...styles.inputan,
            flexDirection: "row",
            alignItems: "center",
          }}
        >
          <TextInput style={styles.text_input} placeholderTextColor={"black"} />
        </View>
      </View>

      <View>
        <Text style={styles.label}>Masukan Harga</Text>
        <View
          style={{
            ...styles.inputan,
            flexDirection: "row",
            alignItems: "center",
          }}
        >
          <TextInput
            style={styles.text_input}
            placeholder="Masukan Harga"
            placeholderTextColor={"black"}
          />
        </View>
      </View>

      <TouchableOpacity style={styles.button}>
        <Text style={styles.text_button}>Tambahkan</Text>
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  text_input: {
    paddingHorizontal: 5,
    color: "black",
    fontSize: 15,
    paddingBottom: 5,
  },
  inputan: {
    justifyContent: "space-between",
    borderWidth: 1,
    height: 50,
    borderColor: "black",
    width: 300,
    borderRadius: 5,
    alignSelf: "center",
  },
  label: {
    fontWeight: "bold",
    marginBottom: 10,
    color: "black",
    marginVertical: 14,
    marginHorizontal: 40,
    paddingHorizontal: 5,
    fontSize: 17,
  },
  button: {
    backgroundColor: "green",
    borderRadius: 15,
    alignSelf: "center",
    paddingVertical: 15,
    paddingHorizontal: 10,
    borderRadius: 10,
    marginTop: 40,
    width: 200,
    alignItems: "center",
  },
  text_button: {
    color: "white",
    fontWeight: "bold",
  },
});

export default TambahProduk;
