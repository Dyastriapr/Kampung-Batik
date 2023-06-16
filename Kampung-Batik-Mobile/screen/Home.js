import React, { Component } from "react";
import { View, StyleSheet, Text, Image } from "react-native";
import { SafeAreaView } from "react-native-web";
import MenuHome from "./widget/MenuHome";

class Home extends Component {
  render() {
    return (
      <SafeAreaView style={styles.container}>
        <View style={styles.header}>
          <View style={styles.user}>
            <View>
              <Image
                source={require("../assets/user.png")}
                style={{ height: 60, width: 60 }}
              />
            </View>
            <View style={{ marginHorizontal: 10, justifyContent: "center" }}>
              <Text style={{ fontWeight: "bold", color: "white" }}>ADMIN</Text>
              <Text style={{ color: "white" }}>Kampung Batik Cibuluh</Text>
            </View>
          </View>
          <View style={{ marginHorizontal: 20, marginVertical: 20 }}>
            <Image
              source={require("../assets/calender.png")}
              style={{ height: 50, width: 50 }}
            />
          </View>
        </View>

        <View style={{ flex: 1, backgroundColor: "blue" }}>
          <MenuHome />
        </View>

        <View style={{ flex: 1, backgroundColor: "red" }}></View>
      </SafeAreaView>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  header: {
    flex: 0.5,
    backgroundColor: "green",
    borderBottomRightRadius: 25,
    borderBottomLeftRadius: 25,
    justifyContent: "space-between",
    flexDirection: "row",
    alignItems: "center",
  },
  user: {
    flexDirection: "row",
    marginHorizontal: 20,

    justifyContent: "center",
  },
});

export default Home;
