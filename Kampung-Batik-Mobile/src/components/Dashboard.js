import React from 'react';
import { StyleSheet, SafeAreaView, View, Text, Image } from 'react-native';

export default function App() {
  return (
    <SafeAreaView style={styles.container}>
      <View style={styles.header}>
       <Image
          source={require('./assets/profile.png')}
          style={styles.logo}
        />
        <Text style={styles.logo}>Admin</Text>
        <Text style={styles.username}>Kampung Batik Cibuluh</Text>
      </View>
      <Text style={styles.heading}>Dashboard</Text>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  },
  header: {
    backgroundColor: '#069544',
    paddingVertical: 40,
    paddingHorizontal: 24,
    flexDirection: 'row',
    alignItems: 'center',
  },
  logo: {
    fontSize: 24,
    fontWeight: 'bold',
    color: '#fff',
    marginRight: 8,
  },
  username: {
    fontSize: 16,
    color: '#fff',
  },
  heading: {
    fontSize: 24,
    fontWeight: 'bold',
    marginTop: 16,
    marginLeft: 16,
  },
});
