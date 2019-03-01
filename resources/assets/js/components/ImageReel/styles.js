import styled from 'styled-components';

export const StyledImage = styled.div`
  position: relative;
  float: left;
  width:  25%;
  height: 280px;
  background-position: 50% 50%;
  background-repeat:   no-repeat;
  background-size:     cover;
  background-image: url(${props => props.src};);
  filter: grayscale(100%);

  &:hover {
    filter: none;
  }
`;

export const StyledDiv = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
`;