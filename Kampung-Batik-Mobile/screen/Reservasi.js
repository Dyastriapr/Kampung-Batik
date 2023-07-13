import React, { Component } from "react";
import { View, StyleSheet, Text, TouchableOpacity, Image } from "react-native";
import ListReservasi from "./widget/ListReservasi";

class Reservasi extends Component {
  render() {
    const { navigation } = this.props;
    return (
      <View>
        <View style={styles.box}>
          <View style={styles.menu}>
            <TouchableOpacity onPress={() => navigation.navigate("Riwayat")}>
              <Image
              source={require("../assets/riwayat.png")}
              style={{marginLeft: 5,}}
              />
              <Text style={styles.textlogo}>Riwayat</Text>
            </TouchableOpacity>

            <TouchableOpacity onPress={() => navigation.navigate("Konfirmasi")}>
              <Image
              source={require("../assets/konfirmasi.png")}
              style={{marginLeft: 30, marginBottom: 10,}}
              />
              <Text style={styles.textlogo}>Konfirmasi</Text>
            </TouchableOpacity>
          </View>
        </View>
        
        <Text style={styles.textlist}>List Reservasi</Text>
        <View style={styles.list}>
          <ListReservasi />
        </View>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  menu: {
    flexDirection: "row",
    justifyContent: "space-around",
    alignItems: "center",
  },
  box: {
    backgroundColor: "white",
    width: 280,
    height: 130,
    borderRadius: 3,
    alignItems: "center",
    justifyContent: "center",
    shadowColor: "#B4B4B4",
    shadowOffset: { width: 5, height: 4 },
    shadowOpacity: 1,
    shadowRadius: 3,
    marginLeft: 55,
    marginVertical: 20,
  },
  textlogo: {
    fontSize: 14,
    fontWeight: "bold",
    marginHorizontal: 10,
    padding: 10,
  },
  textlist: {
    fontSize: 20,
    fontWeight: "bold",
    marginHorizontal: 10,
    marginLeft: 45,
    padding: 10,
  },
});

export default Reservasi;
