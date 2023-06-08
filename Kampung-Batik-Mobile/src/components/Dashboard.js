import React from 'react';
import { StyleSheet, SafeAreaView, View, Text, Image } from 'react-native';

const Dashboard = () => {
  return (
    <SafeAreaView style={styles.container}>
      <View style={styles.header}>
        <Image
          source={require('../../assets/profile.png')}
          style={styles.logo}
        />
        <Text style={styles.username}>Admin</Text>
        <Text style={styles.details}>Kampung Batik Cibuluh</Text>
      </View>
      <Text style={styles.heading}>Jadwal</Text>

      <View style={styles.body}>
        <Image
          source={require('../../assets/image.png')}
          style={styles.image}
        />
        <View style={styles.textContainer}>
          <Text style={styles.title}>Reservasi Selanjutnya</Text>
          <Text style={styles.date}>Kamis 25 Mei, 13:00 WIB</Text>
          <Text style={styles.description}>Experience Membatik, IBIK Bogor</Text>
          <Image
          source={require('../../assets/right.png')}
          style={styles.arrow}
        />
        </View>
      </View>
    </SafeAreaView>
  );
};

export default Dashboard;

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  },
  header: {
    flex: 1,
    backgroundColor: '#069544',
    borderRadius : 10,
    paddingVertical: 40,
    paddingHorizontal: 24,
    flexDirection: 'row',
    alignItems: 'center',
  },
  logo: {
    width: 50,
    height: 50,
    marginRight: 8,
  },
  body: {
    flex: 2,
    flexDirection: 'row',
    marginVertical: 16,
  },
  textContainer: {
    flex: 1,
  },
  title: {
    fontSize: 18,
    marginBottom: 8,
  },
  date: {
    fontSize: 30,
    fontWeight: 'bold',
    marginBottom: 8,
  },
  description: {
    fontSize: 16,
  },
  arrow: {
    width: 40,
    height: 40,
    marginRight: 8,
  },
  username: {
    fontWeight: 'bold',
    fontSize: 16,
    color: '#fff',
  },
  image: {
    width: 150,
    height: 150,
    marginRight: 16,
  },
  details: {
    fontSize: 10,
    color: '#fff',
  },
  heading: {
    fontSize: 24,
    fontWeight: 'bold',
    marginTop: 16,
    marginLeft: 16,
  },
});