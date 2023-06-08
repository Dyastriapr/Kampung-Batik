import { StatusBar } from "expo-status-bar";
import { SafeAreaView, ScrollView, StyleSheet, Text, View, Image } from "react-native";
import Dashboard from './src/components/Dashboard';

export default function App() {
  return (
    <ScrollView style={{marginTop: 50}}>
    <Dashboard />
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff",
    alignItems: "center",
    justifyContent: "center",
  },
});
