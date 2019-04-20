package com.mrx.blogapp.blogappboot.service;

import com.mrx.blogapp.blogappboot.dao.UserDao;
import com.mrx.blogapp.blogappboot.entity.Profile;
import com.mrx.blogapp.blogappboot.entity.Role;
import com.mrx.blogapp.blogappboot.entity.User;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Service
public class UserService {

    @Autowired
    private UserDao userDao;

    @Autowired
    BCryptPasswordEncoder encoder;

    public void createUser(User user) {
        user.setPassword(encoder.encode(user.getPassword()));
        Role role = new Role("USER");

        Profile profile = new Profile();
        profile.setFacebook("facebook.com");
        profile.setInstagram("instagram.com");
        profile.setYoutube("youtube.com");
        profile.setAbout("About");
        profile.setAvatar("static/public/uploads/avatars/1.jpg");

        profile.setUser(user);

        user.setProfile(profile);

        List<Role> roles = new ArrayList<>();
        roles.add(role);

        user.setRoles(roles);
        userDao.save(user);
    }

    public void createAdmin(User user) {
        user.setPassword(encoder.encode(user.getPassword()));
        Role role = new Role("ADMIN");

        Profile profile = new Profile();
        profile.setFacebook("facebook.com");
        profile.setInstagram("instagram.com");
        profile.setYoutube("youtube.com");
        profile.setAbout("Admin");
        profile.setAvatar("public/uploads/avatars/1.jpg");

        profile.setUser(user);
        List<Role> roles = new ArrayList<>();
        roles.add(role);

        user.setProfile(profile);

        user.setRoles(roles);
        userDao.save(user);
    }

    public User findOne(String email) {
        return userDao.findById(email).get();
    }

    public boolean isUserPresent(String email) {
        Optional<User> optionalUser = userDao.findById(email);

        return optionalUser.isPresent();
    }

    public List<User> findAll() {
        return userDao.findAll();
    }

    public List<User> findByName(String name) {

        return userDao.findByNameLike(name);
    }
}
