import React from "react";
import { View, StyleSheet, Text } from "react-native";

const MenuHome = () => {
  return (
    <View style={styles.menu}>
      <View style={styles.toko}>
        <Text style={styles.text}>Toko</Text>
      </View>
      <View style={styles.reservasi}>
        <Text style={styles.text}>Reservasi</Text>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  menu: {
    flexDirection: "row",
    justifyContent: "space-around",
  },
  toko: {
    backgroundColor: "green",
  },
  reservasi: {
    backgroundColor: "green",
  },
  text: {
    color: "white",
  },
});

export default MenuHome;
